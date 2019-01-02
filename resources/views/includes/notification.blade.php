<script type="text/javascript">

      @if($flash = session('success'))
        showNotification('bg-green', '{{ $flash }}')
      @endif

      @if($flash = session('error'))
        showNotification('bg-red', '{{ $flash }}')
      @endif

      @if($errors = session('errors'))
            @foreach ($errors as $error)
                showNotification('bg-red', '{{ $flash }}')
            @endforeach

      @endif

      @if($flash = session('info'))
          showNotification('bg-blue', '{{ $flash }}')
      @endif

      @if($flash = session('warning'))
          showNotification('bg-blue', '{{ $flash }}')
      @endif

    function showNotification(colorName, text)
    {

        if (colorName === null || colorName === '') { colorName = 'bg-cyan'; }
        if (text === null || text === '') { text = 'Notification '; }

        var allowDismiss = true;

        $.notify({
            message: text
        },
        {
            type: colorName,
            allow_dismiss: allowDismiss,
            newest_on_top: true,
            timer: 1000,
            placement: {
                from: "top",
                align: "right"
            },
            animate: {
                enter: "animated fadeInRight",
                exit: "animated fadeOutRight"
            },
            template: '<div data-notify="container" class="bootstrap-notify-container alert alert-dismissible {0} ' + (allowDismiss ? "p-r-35" : "") + '" role="alert">' +
            '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
            '<span data-notify="icon"></span> ' +
            '<span data-notify="title">{1}</span> ' +
            '<span data-notify="message">{2}</span>' +
            '<div class="progress" data-notify="progressbar">' +
            '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
            '</div>' +
            '<a href="{3}" target="{4}" data-notify="url"></a>' +
            '</div>'
        });
    }
</script>
