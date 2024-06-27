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
            <div>
                <div>
                    <div>
                        <div></div>
                        <div>
                            <h2></h2>
                            <p></p>
                            <button></button>
                        </div>
                    </div>
                    <div>
                        <h1></h1>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                    <div>
                        <div>
                            <h2></h2>
                            <p></p>
                            <div>
                                <p>86</p>
                            </div>
                        </div>
                        <div>
                            <h2></h2>
                            <p></p>
                            <div>
                                <p>86</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <table>
                <?php foreach ($messages as $message) : ?>
                    <tr>
                        <td><?php echo $message['Message']['nome']; ?></td>
                        <td><?php echo $message['Message']['email']; ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php unset($message); ?>
            </table>
        </section>
    </div>
</body>