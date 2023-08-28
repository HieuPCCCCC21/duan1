<?php include_once "header_admin.php" ?>
<main id="main" class="main">
    <div class="pagetitle">
        <h1>Quản lý phản hồi</h1>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách phản hồi </h5>
                        <div class="table-wrapper">
                            <table class="table table-sm datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Full name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone</th>
                                        <th scope="col">Nội dung</th>
                                        <th scope="col">Ngày phản hồi</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $status_labels = array(
                                        0 => 'Chưa phản hồi',
                                        1 => 'Đã phản hồi'
                                    );
                                    $ordinalNumber = 1;
                                    foreach ($list_feedback as $fb) {
                                        $delete_feedback = "?act=delete_feedback&id=" . $fb['id'];
                                        $status_label = isset($status_labels[$fb['status']]) ? $status_labels[$fb['status']] : 'Không xác định';
                                        echo '<tr>
                                                <th scope="row">' . $ordinalNumber . '</th>
                                                <td>' . $fb['fullname'] . '</td>
                                                <td>' . $fb['email'] . '</td>
                                                <td class="fw-bold">' . $fb['phone_number'] . '</td>
                                                <td>' . $fb['note'] . '</td>
                                                <td class="fw-bold">' . $fb['created_at'] . '</td>
                                                <td class="fw-bold">' . $status_label . '</td>
                                                <td>
                                                <a href="#" class="text-info" title="Show Detail" data-toggle="tooltip" onclick="showUpdateModal(<?php echo '.$fb['id'].' ?>)"><i class="bi bi-pencil-square"></i></a>                                                                                                       
                                                    <a href="' . $delete_feedback . '" class="delete" title="Delete" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không ?\')" data-toggle="tooltip"><i class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>';
                                        $ordinalNumber++;
                                    }?>

                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="updateStatusModal" tabindex="-1" aria-labelledby="updateStatusModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateStatusModalLabel">Cập Nhật Trạng Thái</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="feedbackStatus">Trạng thái:</label>
                    <select class="form-select" id="feedbackStatus">
                        <option value="0">Chưa phản hồi</option>
                        <option value="1">Đã phản hồi</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-primary" onclick="updateFeedbackStatus()">Cập nhật</button>
                </div>
                </div>
            </div>
            </div>

    </section>
</main><!-- End #main -->
<script>
    function showUpdateModal(feedbackId) {
    // Lấy trạng thái hiện tại của phản hồi và cài đặt cho Select Option
    var currentStatus = /* lấy trạng thái từ dữ liệu */ // 0 hoặc 1
    document.getElementById('feedbackStatus').value = currentStatus;

    // Mở modal
    var modal = new bootstrap.Modal(document.getElementById('updateStatusModal'));
    modal.show();

    // Lưu feedbackId vào biến toàn cục để sử dụng trong hàm updateFeedbackStatus()
    selectedFeedbackId = feedbackId;
}

function updateFeedbackStatus() {
    var newStatus = document.getElementById('feedbackStatus').value;

    // Thực hiện AJAX request để cập nhật trạng thái
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'update_feedback_status.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Cập nhật trạng thái thành công, có thể thực hiện các thay đổi trên giao diện nếu cần
                alert('Cập nhật trạng thái thành công');
                // Đóng modal
                var modal = new bootstrap.Modal(document.getElementById('updateStatusModal'));
                modal.hide();
                // Cập nhật lại giao diện nếu cần
            } else {
                alert('Có lỗi xảy ra khi cập nhật trạng thái');
            }
        }
    };
    xhr.send('feedbackId=' + selectedFeedbackId + '&newStatus=' + newStatus);
}
</script>
<?php include_once "footer_admin.php" ?>