    <h2>Search</h2>
    <div class="regisFrm">
        <form action="results.php" method="post">
            <label>Enter full name or email or part of one of them</label><br />
            <input type="text" name="search" placeholder="NAME OR EMAIL"><br /><br />
            <div class="send-button">
                <input type="submit" name="searchSubmit" value="SEARCH">
            </div>
        </form>
        <p><a href="registration.php">Home</a></p>
    </div>
    <?php

    if (!empty($_POST['search'])) {
        $text = $_POST['search'];
        include 'user.php';
        $users = new User;
        $result = $users->getAll($text);
        //var_dump($result);die();
        $number = count($result);
        ?>
        <h2>Results</h2>
        <?php
    for ($i=0; $i<$number; $i+=2) {
        echo 'Name:  '.$result[$i]['name']; ?> <br /> <?php
        echo 'Email: '.$result[$i+1]['email']; ?> <br /><br /> <?php
    }
    }
