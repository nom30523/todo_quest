document.addEventListener('DOMContentLoaded', function() {
  let cmds = document.querySelectorAll('.status');
  cmds.forEach(function(cmd) {
    cmd.addEventListener('click', function(e) {
      e.preventDefault();
      document.getElementById('form_' + this.dataset.id).submit();
    })
  });
});