<div class="container-director-form">
    <form class="form-director" action="/director/<?= isset($data['director']['name']) ? 'update' : 'store' ?>"
          method="post">
        <label for="directorSelect" class="form-label"><b>Додати нового режисера</b></label>
        <?php if (isset($data['director']['name'])): ?>
            <input type="hidden" name='directorId' value="<?= $data['director']['directorId'] ?> " require minlength="5">
        <?php endif ?>
        <label for="addDirector">
            <input class="form-control" type="text" id="addDirector"
                   value="<?= isset($data['director']['name']) ? $data['director']['name'] : '' ?>"
                   name="nameDirector" placeholder="Джордж Лукас" required minlength="5" maxlength="255">
        </label>
        <div class="form-director-btn">
            <button class="btn btn-secondary" type="submit">Записати нового режисера</button>
        </div>
    </form>
</div>