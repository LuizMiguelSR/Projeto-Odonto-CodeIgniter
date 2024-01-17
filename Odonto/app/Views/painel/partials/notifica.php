<?php if (session()->has('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show position-fixed bottom-0 end-0 mb-4 me-4" role="alert">
        <strong><?= session()->get('success') ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<script>
    // fecha o alerta após 3 segundos
    setTimeout(function() {
        document.querySelector('.alert').remove();
    }, 5000);
</script> 