<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <div class="table-responsive-sm">
        <table id="example" class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>
                        <a href="<?= base_url('member-table?sort_column=m_id&sort_direction=' . ($sort_column == 'm_id' && $sort_direction == 'ASC' ? 'DESC' : 'ASC')) ?>">
                            Id
                            <?php if ($sort_column == 'm_id'): ?>
                                <i class="fa fa-arrow-<?= $sort_direction == 'ASC' ? 'up' : 'down' ?>"></i>
                            <?php endif; ?>
                        </a>                   
                     </th>
                    <th>
                        <a href="<?= base_url('member-table?sort_column=m_first_name&sort_direction=' . ($sort_column == 'm_first_name' && $sort_direction == 'ASC' ? 'DESC' : 'ASC')) ?>">
                            First name
                            <?php if ($sort_column == 'm_first_name'): ?>
                                <i class="fa fa-arrow-<?= $sort_direction == 'ASC' ? 'up' : 'down' ?>"></i>
                            <?php endif; ?>
                        </a>
                    </th>
                    <th>
                        <a href="<?= base_url('member-table?sort_column=m_last_name&sort_direction=' . ($sort_column == 'm_last_name' && $sort_direction == 'ASC' ? 'DESC' : 'ASC')) ?>">
                            Last name
                            <?php if ($sort_column == 'm_last_name'): ?>
                                <i class="fa fa-arrow-<?= $sort_direction == 'ASC' ? 'up' : 'down' ?>"></i>
                            <?php endif; ?>
                        </a>
                    </th>
                    <th>
                        <a href="<?= base_url('member-table?sort_column=m_dob&sort_direction=' . ($sort_column == 'm_dob' && $sort_direction == 'ASC' ? 'DESC' : 'ASC')) ?>">
                            Dob
                            <?php if ($sort_column == 'm_dob'): ?>
                                <i class="fa fa-arrow-<?= $sort_direction == 'ASC' ? 'up' : 'down' ?>"></i>
                            <?php endif; ?>
                        </a>
                    </th>
                    <th>
                        <a href="<?= base_url('member-table?sort_column=m_address&sort_direction=' . ($sort_column == 'm_address' && $sort_direction == 'ASC' ? 'DESC' : 'ASC')) ?>">
                            Address
                            <?php if ($sort_column == 'm_address'): ?>
                                <i class="fa fa-arrow-<?= $sort_direction == 'ASC' ? 'up' : 'down' ?>"></i>
                            <?php endif; ?>
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($members as $member): ?>
                    <tr>
                        <td><?= esc($member['m_id']) ?></td>
                        <td><?= esc($member['m_first_name']) ?></td>
                        <td><?= esc($member['m_last_name']) ?></td>
                        <td><?= esc($member['m_dob']) ?></td>
                        <td><?= esc($member['m_address']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
