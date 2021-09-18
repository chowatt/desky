<div class="users form form-signin">
    <h1 class="h3 mb-3 font-weight-normal">Desky</h1>

    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <?= $this->Form->control('username', ['required' => true, 'placeholder' => 'Username', 'label' => false]) ?>
        <?= $this->Form->control('password', ['required' => true, 'placeholder' => 'Password', 'label' => false]) ?>
    </fieldset>
    <div class="checkbox mb-3">
        <label>
            <a href='#'>Password Management</a>
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">© Howattech 2021</p>

    <?= $this->Form->end() ?>
</div>