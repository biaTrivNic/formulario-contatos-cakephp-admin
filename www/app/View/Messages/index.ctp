<!DOCTYPE html>
<html>

<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        Contato.con
    </title>
    <?php
    echo $this->Html->css('dashboard');
    ?>
</head>

<body>
    <div class="content_container">
        <aside class="menu_container">
            <div class="user_container">
                <div><img src="/img/circulo-azul-com-usuario-branco.png" alt=""></div>
                <h2>Name</h2>
                <button>Lorem ipsum</button>
            </div>
            <nav>
                <ul>
                    <li>Messages</li>
                    <li>Data</li>
                    <li>Projects</li>
                    <li>Web Pages</li>
                </ul>
            </nav>
            <a href="/users/logout">Logout</a>
        </aside>
        <section>
            <h1>Dashboard.</h1>
            <table class="table_container">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
                <?php foreach ($messages as $message) : ?>
                    <tr>
                        <td><?php echo $this->Html->link(
                                $message['Message']['nome'],
                                array('controller' => 'messages', 'action' => 'view', $message['Message']['id'])
                            ); ?></td>
                        <td><?php echo $message['Message']['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
    </div>
</body>