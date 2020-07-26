$(function () {
  $(".tambah").on("click", function () {
    $("#formModalLabel").text("Tambah Data Mahasiswa");
  });

  $(".ubah").on("click", function () {
    $("#formModalLabel").text("Ubah Data Mahasiswa");
    $(".modal-content form").attr(
      "action",
      "http://localhost/php_mvc/public/Mahasiswa/ubah"
    );

    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/php_mvc/public/Mahasiswa/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        Object.keys(data).forEach((key) => {
          $(`#${key}`).val(data[key]);
        });
      },
    });
  });
});
