<?php
include('include/data-header.php');
// Include database connection
include('db.php');
// Total records per page
$recordsPerPage = 10;
// Current page calculation
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$page = max($page, 1); // Ensure the page is at least 1
$offset = ($page - 1) * $recordsPerPage;
// Fetch total records for pagination
$totalQuery = "SELECT COUNT(*) AS total FROM contact_messages";
$totalResult = mysqli_query($conn, $totalQuery);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalRecords = $totalRow['total'];
$totalPages = ceil($totalRecords / $recordsPerPage);
// Fetch records for the current page
$query = "SELECT * FROM contact_messages LIMIT $recordsPerPage OFFSET $offset";
$result = mysqli_query($conn, $query);
?>
<div class="container-fluid mt-5">
    <div class="container section-title">
        <h2>Contact Messages </h2>
    </div>
    <div class="form-all-vc">
        <!-- Contact Messages Section -->
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
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            <?php if ($page > 1): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page - 1; ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php endif; ?>
            <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                <li class="page-item <?php echo $i == $page ? 'active' : ''; ?>">
                    <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
                </li>
            <?php endfor; ?>
            <?php if ($page < $totalPages): ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?php echo $page + 1; ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </nav>
</div>
<?php
include('include/data-footer.php');
?>