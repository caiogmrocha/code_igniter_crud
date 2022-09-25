<style>
main {
    max-width: 400px;
}
</style>

<main>
    <h1>Edição de Usuário</h1>

    <form method="POST" action="<?= base_url('users/update/' . $user['id']) ?>">
        <input type="hidden" name="_method" value="PUT" />

        <fieldset>
            <label>Name</label>
            <input type="text" name="name" value="<?= $user['name'] ?>">
        </fieldset>

        <fieldset>
            <label>E-mail</label>
            <input type="email" name="email" value="<?= $user['email'] ?>">
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