<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Gerenciamento de Usuários</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .error { color: red; font-size: 0.9em; }
        .success { color: green; margin-bottom: 15px; }
        .form-group { margin-bottom: 15px; }
    </style>
</head>
<body>

<h1>Cadastro e Lista de Usuários</h1>

<?php if (session('success')): ?>
    <div class="success"><?= session('success') ?></div>
<?php endif; ?>

<form action="/users" method="POST">
    <input type="hidden" name="_token" value="<?= csrf_token() ?>">

    <div class="form-group">
        <label for="name">Nome:</label><br>
        <input type="text" id="name" name="name" value="<?= e(old('name')) ?>">

        <?php if ($errors->has('name')): ?>
            <div class="error"><?= $errors->first('name') ?></div>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="phone">Telefone:</label><br>
        <input type="text" id="phone" name="phone" value="<?= e(old('phone')) ?>">

        <?php if ($errors->has('phone')): ?>
            <div class="error"><?= $errors->first('phone') ?></div>
        <?php endif; ?>
    </div>

    <button type="submit">Salvar Usuário</button>
</form>

<hr>

<h2>Lista de Usuários Cadastrados</h2>

<ul>
    <?php if ($users->isEmpty()): ?>
        <li>Nenhum usuário cadastrado ainda.</li>
    <?php else: ?>
        <?php foreach ($users as $user): ?>
            <li>
                <strong><?= e($user->name) ?></strong>
                — <?= e($user->phone ?? 'Sem telefone') ?>
            </li>
        <?php endforeach; ?>
    <?php endif; ?>
</ul>

</body>
</html>
<?php /**PATH C:\Users\PC\Documents\Cursos\Projetos\laravel-studies\studies\resources\views\users\index.blade.php ENDPATH**/ ?>