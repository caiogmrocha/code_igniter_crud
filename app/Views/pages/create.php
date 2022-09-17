<style>
main {
    max-width: 400px;
}
</style>

<main>
    <h1>Cadastro de Usuário</h1>

    <form method="POST" action="<?= base_url('store') ?>">
        <fieldset>
            <label>Name</label>
            <input type="text" name="name">
        </fieldset>

        <fieldset>
            <label>E-mail</label>
            <input type="email" name="email">
        </fieldset>

        <fieldset>
            <label>Password</label>
            <input type="password" name="password">
        </fieldset>

        <fieldset>
            <button type="submit">Salvar</button>
        </fieldset>
    </form>
</main>