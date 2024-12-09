<?php
include('include/header.php');
// Include database connection
include('db.php');

?>



    <div class="container mt-5">
        <h1 class="mb-4">Form Submissions</h1>

        <!-- Subscribers Section -->
        <h2>Subscribers</h2>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>Subscribed At</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM subscribers";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['subscribed_at']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- Contact Messages Section -->
        <h2>Contact Messages</h2>
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
                <?php
                $query = "SELECT * FROM contact_messages";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    // Limit the message to 15 words
                    $message = $row['message'];
                    $words = explode(' ', $message);
                    $shortMessage = implode(' ', array_slice($words, 0, 15)); // First 15 words

                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$shortMessage}...</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
                }
                ?>
            </tbody>

        </table>

        <!-- Demo Requests Section -->
        <h2>Demo Requests</h2>
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
                <?php
                $query = "SELECT * FROM demo_requests";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['number']}</td>
                        <td>{$row['subject']}</td>
                        <td>{$row['message']}</td>
                        <td>{$row['created_at']}</td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>


<?php
include('include/footer.php');
?>