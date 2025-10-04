<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'All Notices'; // Set the page title
?>
<?php require './components/header.php'; ?>

<!-- All Notices CSS -->
<style>
    .all-notice .page-header {
        background: white;
        border-radius: 20px;
        padding: 2rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .all-notice .page-header h1 {
        margin: 0;
        color: #333;
        font-weight: 700;
    }

    .all-notice .breadcrumb {
        background: transparent;
        padding: 0;
        margin: 0.5rem 0 0 0;
    }

    .all-notice .icon-box {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.2rem;
    }

    .all-notice .stats-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
        margin-bottom: 2rem;
    }

    .all-notice .stat-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .all-notice .stat-card:hover {
        transform: translateY(-5px);
    }

    .all-notice .stat-card-content {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .all-notice .stat-icon {
        width: 50px;
        height: 50px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: white;
    }

    .all-notice .stat-icon.active {
        background: linear-gradient(135deg, #4facfe, #00f2fe);
    }

    .all-notice .stat-icon.expired {
        background: linear-gradient(135deg, #f093fb, #f5576c);
    }

    .all-notice .stat-icon.total {
        background: linear-gradient(135deg, #667eea, #764ba2);
    }

    .all-notice .stat-icon.draft {
        background: linear-gradient(135deg, #fa709a, #fee140);
    }

    .all-notice .filter-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 2rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .all-notice .filter-title {
        color: #667eea;
        font-weight: 600;
        font-size: 1.2rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .all-notice .notice-card {
        background: white;
        border-radius: 20px;
        padding: 1.5rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: all 0.3s;
        border-left: 5px solid transparent;
    }

    .all-notice .notice-card:hover {
        transform: translateX(5px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.15);
    }

    .all-notice .notice-card.active {
        border-left-color: #00f2fe;
    }

    .all-notice .notice-card.expired {
        border-left-color: #f5576c;
        opacity: 0.8;
    }

    .all-notice .notice-card.draft {
        border-left-color: #fee140;
    }

    .all-notice .notice-header {
        display: flex;
        justify-content: space-between;
        align-items: start;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .all-notice .notice-title {
        font-size: 1.3rem;
        font-weight: 600;
        color: #333;
        margin: 0;
        flex: 1;
    }

    .all-notice .notice-badges {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
    }

    .all-notice .badge-custom {
        padding: 0.5rem 1rem;
        border-radius: 20px;
        font-weight: 500;
        font-size: 0.875rem;
    }

    .all-notice .badge-active {
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        color: white;
    }

    .all-notice .badge-expired {
        background: linear-gradient(135deg, #f093fb, #f5576c);
        color: white;
    }

    .all-notice .badge-draft {
        background: linear-gradient(135deg, #fa709a, #fee140);
        color: white;
    }

    .all-notice .badge-type {
        background: #e0e0e0;
        color: #333;
    }

    .all-notice .notice-meta {
        display: flex;
        gap: 2rem;
        margin-bottom: 1rem;
        flex-wrap: wrap;
        color: #6c757d;
        font-size: 0.9rem;
    }

    .all-notice .notice-meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .all-notice .notice-description {
        color: #666;
        line-height: 1.6;
        margin-bottom: 1rem;
    }

    .all-notice .notice-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1rem;
        border-top: 1px solid #e0e0e0;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .all-notice .action-buttons {
        display: flex;
        gap: 0.5rem;
    }

    .all-notice .btn-action {
        width: 40px;
        height: 40px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: none;
        transition: all 0.3s;
        cursor: pointer;
    }

    .all-notice .btn-action:hover {
        transform: scale(1.1);
    }

    .all-notice .btn-view {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    .all-notice .btn-edit {
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        color: white;
    }

    .all-notice .btn-delete {
        background: linear-gradient(135deg, #f093fb, #f5576c);
        color: white;
    }

    .all-notice .btn-duplicate {
        background: linear-gradient(135deg, #fa709a, #fee140);
        color: white;
    }

    .all-notice .btn-add-new {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        border: none;
        border-radius: 15px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s;
        box-shadow: 0 4px 15px rgba(102, 126, 234, 0.4);
    }

    .all-notice .btn-add-new:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        color: white;
    }

    .all-notice .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .all-notice .empty-state i {
        font-size: 5rem;
        color: #e0e0e0;
        margin-bottom: 1rem;
    }

    .all-notice .pagination-custom {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
        margin-top: 2rem;
    }

    .all-notice .pagination-custom .page-link {
        border-radius: 10px;
        border: none;
        color: #667eea;
        padding: 0.75rem 1rem;
        transition: all 0.3s;
    }

    .all-notice .pagination-custom .page-link:hover {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    .all-notice .pagination-custom .page-item.active .page-link {
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
    }

    .all-notice .search-box {
        position: relative;
    }

    .all-notice .search-box input {
        border-radius: 15px;
        padding: 0.75rem 1rem 0.75rem 3rem;
        border: 2px solid #e0e0e0;
    }

    .all-notice .search-box i {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    @media (max-width: 767px) {
        .all-notice .notice-header {
            flex-direction: column;
        }

        .all-notice .notice-meta {
            flex-direction: column;
            gap: 0.5rem;
        }

        .all-notice .notice-footer {
            flex-direction: column;
            align-items: stretch;
        }

        .all-notice .action-buttons {
            justify-content: center;
        }
    }
</style>

<!--------------------------->
<!-- START MAIN AREA -->
<!--------------------------->
<div class="content-wrapper">
    <div class="all-notice">
        <!-- Page Header -->
        <div class="page-header">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div class="d-flex align-items-center gap-3">
                    <div class="icon-box">
                        <i class="fa-solid fa-flag"></i>
                    </div>
                    <div>
                        <h1>All Notices</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php" class="text-decoration-none">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Notices</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <button class="btn btn-add-new" onclick="window.location.href='add-notice.php'">
                    <i class="fa-solid fa-plus me-2"></i>Add New Notice
                </button>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-card-content">
                    <div class="stat-icon total">
                        <i class="fa-solid fa-flag"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Total Notices</div>
                        <h3 class="mb-0" id="totalCount">0</h3>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-card-content">
                    <div class="stat-icon active">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Active Notices</div>
                        <h3 class="mb-0" id="activeCount">0</h3>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-card-content">
                    <div class="stat-icon expired">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Expired</div>
                        <h3 class="mb-0" id="expiredCount">0</h3>
                    </div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-card-content">
                    <div class="stat-icon draft">
                        <i class="fa-solid fa-file-pen"></i>
                    </div>
                    <div>
                        <div class="text-muted small">Drafts</div>
                        <h3 class="mb-0" id="draftCount">0</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- Filters -->
        <div class="filter-card">
            <div class="filter-title">
                <i class="fa-solid fa-filter"></i>
                Filters & Search
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="search-box">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" class="form-control" placeholder="Search notices..." id="searchInput">
                    </div>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="statusFilter">
                        <option value="all">All Status</option>
                        <option value="active">Active</option>
                        <option value="expired">Expired</option>
                        <option value="draft">Draft</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="typeFilter">
                        <option value="all">All Types</option>
                        <option value="announcement">Announcement</option>
                        <option value="event">Event</option>
                        <option value="meeting">Meeting</option>
                        <option value="deadline">Deadline</option>
                        <option value="recruitment">Recruitment</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="categoryFilter">
                        <option value="all">All Categories</option>
                        <option value="administrative">Administrative</option>
                        <option value="volunteer">Volunteer</option>
                        <option value="program">Program</option>
                        <option value="training">Training</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select" id="sortFilter">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                        <option value="expiring">Expiring Soon</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Notices List -->
        <div id="noticesList"></div>

        <!-- Pagination -->
        <nav>
            <ul class="pagination pagination-custom">
                <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fa-solid fa-chevron-left"></i></a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#"><i class="fa-solid fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!--------------------------->
<!-- END MAIN AREA -->
<!--------------------------->



<?php require './components/footer.php'; ?>