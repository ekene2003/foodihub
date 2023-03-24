$(document).ready(function () {});
function deleteFood(id) {
  swal("Are you sure you want to delete", "This action is irreversible", {
    icon: "error",
    buttons: {
      confirm: {
        text: "Yes! I want to Delete",
        className: "btn btn-danger",
      },
      cancelled: {
        text: "No, sorry",
        className: "btn btn-success",
      },
    },
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url: "./controllers/foodmgt.php",
        type: "POST",
        data: {
          delete_id: id,
        },
        success: (res) => {
          res = JSON.parse(res);
          const { status, title, btn, icon, comment } = res;
          swal(title, comment, {
            icon,
            buttons: {
              confirm: { className: btn },
            },
          });
        },
      });
      if (res.status == true) location.reload();
    }
  });
}
