<style>

/* Dashboard CSS */
.cursor-pointer {
    cursor: pointer;
}

a{
    text-decoration: none;
}
button {
    border: 0;
}

/* Unified Stat Cards for All Pages */
.stats-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    min-height: 120px;
}

.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.stat-card-content {
    display: flex;
    align-items: center;
    gap: 1rem;
}

.stat-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    color: white;
}

/* Dashboard Specific Icon Backgrounds */
.stat-icon.donate {
    background: #1C87ED;
}

.stat-icon.media-files {
    background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(125, 17, 39, 1) 100%);
}

.stat-icon.notice {
    background: linear-gradient(65deg, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 53%);
}

.stat-icon.activities {
    background: linear-gradient(90deg, rgba(252, 176, 69, 1) 0%, rgba(253, 29, 29, 1) 81%, rgba(252, 176, 69, 1) 100%);
}

/* All Notice Page Icon Backgrounds */
.stat-icon.active {
    background: linear-gradient(135deg, #4facfe, #00f2fe);
}

.stat-icon.expired {
    background: linear-gradient(135deg, #f093fb, #f5576c);
}

.stat-icon.total {
    background: linear-gradient(135deg, #667eea, #764ba2);
}

.stat-icon.draft {
    background: linear-gradient(135deg, #fa709a, #fee140);
}

.stat-card-title {
    font-size: 20px;
    font-weight: 600;
    margin: 0;
    color: #333;
}

.stat-card-value {
    font-size: 2rem;
    font-weight: 700;
    margin: 0;
    color: #333;
}

.stat-card-label {
    font-size: 0.875rem;
    color: #6c757d;
    margin: 0;
}

/* Quick Actions - Unified Design */
.quick-actions-title {
    font-size: 1.5rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    color: #333;
}

.quick-actions-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    margin-bottom: 2rem;
}

.quick-action-card {
    background: white;
    border-radius: 20px;
    padding: 2rem 1.5rem;
    text-align: center;
    cursor: pointer;
    transition: all 0.3s;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: none;
}

.quick-action-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.quick-action-icon {
    width: 40px;
    height: 40px;
    border-radius: 15px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.8rem;
    color: white;
}

/* Quick Action Icon Backgrounds */
.quick-action-icon.new-notice {
    background: #27A6F5;
}

.quick-action-icon.upload-media {
    background: linear-gradient(90deg, rgba(24, 178, 199, 1) 0%, rgba(16, 112, 181, 1) 100%);
}

.quick-action-icon.add-activity {
    background: linear-gradient(90deg, rgba(24, 199, 62, 1) 0%, rgba(16, 181, 132, 1) 100%);
}

.quick-action-icon.edit-about {
    background: radial-gradient(circle, rgba(179, 179, 179, 1) 0%, rgba(232, 188, 188, 1) 55%);
}

.quick-action-title {
    font-size: 1rem;
    font-weight: 600;
    margin: 0;
    color: #333;
}

/* Legacy classes for backward compatibility */
.donate-bg {
    background-color: #1C87ED;
    border-radius: 20px;
}

.media-files-bg {
    background: #3F5EFB;
    background: radial-gradient(circle, rgba(63, 94, 251, 1) 0%, rgba(125, 17, 39, 1) 100%);
    border-radius: 20px;
}

.notice-bg {
    background: #090979;
    background: linear-gradient(65deg, rgba(9, 9, 121, 1) 0%, rgba(0, 212, 255, 1) 53%);
    border-radius: 20px;
}

.activities-bg {
    background: #FCB045;
    background: linear-gradient(90deg, rgba(252, 176, 69, 1) 0%, rgba(253, 29, 29, 1) 81%, rgba(252, 176, 69, 1) 100%);
    border-radius: 20px;
}

.new-notice-bg {
    background-color: #27A6F5;
    border-radius: 20px;
}

.upload-media-bg {
    background: #18b2c7;
    background: linear-gradient(90deg, rgba(24, 178, 199, 1) 0%, rgba(16, 112, 181, 1) 100%);
    border-radius: 20px;
}

.add-activity-bg {
    background: #18c73e;
    background: linear-gradient(90deg, rgba(24, 199, 62, 1) 0%, rgba(16, 181, 132, 1) 100%);
    border-radius: 20px;
}

.edit-about-bg {
    background: #b3b3b3;
    background: radial-gradient(circle, rgba(179, 179, 179, 1) 0%, rgba(232, 188, 188, 1) 55%);
    border-radius: 20px;
}

/* Create Notice Page Styling */
.create-notice {
    background: #fff;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.1);
}

.create-notice-title {
    font-size: 28px;
    margin-bottom: 25px;
    font-weight: 600;
}

.create-notice label {
    font-size: 16px;
    font-weight: 500;
}

.create-notice input,
.create-notice select,
.create-notice textarea {
    width: 100%;
    padding: 12px 15px;
    margin-top: 8px;
    border: 1px solid #d1d1d1;
    border-radius: 10px;
    font-size: 15px;
    transition: 0.3s;
}

.create-notice input:focus,
.create-notice select:focus,
.create-notice textarea:focus {
    border-color: #27A6F5;
    box-shadow: 0 0 6px rgba(39, 166, 245, 0.3);
    outline: none;
}

.create-notice textarea {
    resize: vertical;
}

.btn-submit {
    background-color: #27A6F5;
    color: #fff;
    padding: 12px 30px;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 500;
    transition: 0.3s;
    cursor: pointer;
    border: none;
}

.btn-submit:hover {
    background-color: #1c87ed;
}

/* All Notice page Start */
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

/* Filter Card */
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

/* Notice Card */
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

/* All Notice page End */

/* Gallery section start   */
/* Form Controls - Better Look */
.gallery .form-control,
.gallery .form-select {
    border-radius: 10px;
    border: 1px solid #ddd;
    padding: 0.65rem 1rem;
    font-size: 0.95rem;
    transition: all 0.2s;
    box-shadow: none;
}

.gallery .form-control:focus,
.gallery .form-select:focus {
    border-color: #667eea;
    box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
}

/* Search input consistency */
.gallery #searchInput {
    padding-left: 2.5rem;
    background: #fff url('https://cdn-icons-png.flaticon.com/512/622/622669.png') no-repeat 10px center;
    background-size: 16px;
}
/* Gallery section End   */
/* More spacing on small devices */
@media (max-width: 991px) {
    .stat-card-title {
        font-size: 16px;
    }

    .stat-icon {
        width: 45px;
        height: 45px;
        font-size: 1.3rem;
    }
}

@media (max-width: 767px) {
    .stats-container {
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    }

    .stat-card {
        padding: 1rem;
    }

    .stat-card-title {
        font-size: 14px;
    }

    .stat-card-value {
        font-size: 1.5rem;
    }

    .quick-actions-container {
        grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
    }

    .quick-action-card {
        padding: 1.5rem 1rem;
    }

    .quick-action-icon {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
    }

    .quick-action-title {
        font-size: 0.9rem;
    }

    .create-notice {
        padding: 20px;
    }

    .create-notice-title {
        font-size: 24px;
    }

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