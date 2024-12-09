<?php
include('include/data-header.php');
// Include database connection
include('db.php');
// Records per page
$recordsPerPage = 5;
// Current page for Subscribers
$pageSubscribers = isset($_GET['sub_page']) ? (int) $_GET['sub_page'] : 1;
$pageSubscribers = max($pageSubscribers, 1);
$offsetSubscribers = ($pageSubscribers - 1) * $recordsPerPage;
// Fetch total records and records for the current page for Subscribers
$totalSubscribersQuery = "SELECT COUNT(*) AS total FROM subscribers";
$totalSubscribersResult = mysqli_query($conn, $totalSubscribersQuery);
$totalSubscribers = mysqli_fetch_assoc($totalSubscribersResult)['total'];
$totalSubscribersPages = ceil($totalSubscribers / $recordsPerPage);
$subscribersQuery = "SELECT * FROM subscribers LIMIT $recordsPerPage OFFSET $offsetSubscribers";
$subscribersResult = mysqli_query($conn, $subscribersQuery);
// Current page for Contact Messages
$pageMessages = isset($_GET['msg_page']) ? (int) $_GET['msg_page'] : 1;
$pageMessages = max($pageMessages, 1);
$offsetMessages = ($pageMessages - 1) * $recordsPerPage;
// Fetch total records and records for the current page for Contact Messages
$totalMessagesQuery = "SELECT COUNT(*) AS total FROM contact_messages";
$totalMessagesResult = mysqli_query($conn, $totalMessagesQuery);
$totalMessages = mysqli_fetch_assoc($totalMessagesResult)['total'];
$totalMessagesPages = ceil($totalMessages / $recordsPerPage);
$messagesQuery = "SELECT * FROM contact_messages LIMIT $recordsPerPage OFFSET $offsetMessages";
$messagesResult = mysqli_query($conn, $messagesQuery);
// Current page for Demo Requests
$pageDemo = isset($_GET['demo_page']) ? (int) $_GET['demo_page'] : 1;
$pageDemo = max($pageDemo, 1);
$offsetDemo = ($pageDemo - 1) * $recordsPerPage;
// Fetch total records and records for the current page for Demo Requests
$totalDemoQuery = "SELECT COUNT(*) AS total FROM demo_requests";
$totalDemoResult = mysqli_query($conn, $totalDemoQuery);
$totalDemo = mysqli_fetch_assoc($totalDemoResult)['total'];
$totalDemoPages = ceil($totalDemo / $recordsPerPage);
$demoQuery = "SELECT * FROM demo_requests LIMIT $recordsPerPage OFFSET $offsetDemo";
$demoResult = mysqli_query($conn, $demoQuery);
?>
<div class="container-fluid mt-5">
    <div class="container section-title">
        <h2>Form Submissions</h2>
    </div>
    <div class="form-all-vc">
        <div class="subscribers py-4">
            <!-- Subscribers Section -->
            <h4 class="" style="color: var(--yellow-text);">Subscribers Form </h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Subscribed At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($subscribersResult)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['subscribed_at'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="buttons my-4">
                <button class="btn" style="background: var(--darkBlue-text);">
                    <a class="text-white" href="subscribers_view_data.php">See more</a> </button>
            </div>
        </div>
        <div class="contact-form py-4">
            <h4 class="" style="color: var(--yellow-text);">Contact Form </h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Submitted At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($messagesResult)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['subject'] ?></td>
                            <td><?= implode(' ', array_slice(explode(' ', $row['message']), 0, 15)) ?>...</td>
                            <td><?= $row['created_at'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="buttons my-4">
                <button class="btn" style="background: var(--darkBlue-text);">
                    <a class="text-white" href="contact_view_data.php">See more</a> </button>
            </div>
        </div>
        <div class="demo-requests py-4">
            <!-- Demo Requests Section -->
            <h4 class="" style="color: var(--yellow-text);">Demo Requests Form </h4>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Requested At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($demoResult)): ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['number'] ?></td>
                            <td><?= $row['subject'] ?></td>
                            <td><?= $row['message'] ?></td>
                            <td><?= $row['created_at'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
            <div class="buttons my-4">
                <button class="btn" style="background: var(--darkBlue-text);">
                    <a class="text-white" href="demo_view_data.php">See more</a> </button>
            </div>
        </div>
    </div>
</div>
<?php
include('include/data-footer.php');
?>