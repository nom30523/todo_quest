document.addEventListener('DOMContentLoaded', function() {
  let cmds = document.querySelectorAll('.del');
  cmds.forEach(function(cmd) {
    cmd.addEventListener('click', function(e) {
      e.preventDefault();
      if (confirm('削除してもよろしいですか？')) {
        document.getElementById('del_' + this.dataset.id).submit();
      }
    })
  });
});