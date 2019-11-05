<?php 

require_once("../inc/config.php");




?><?php 
$pageTitle = "Contact us";
$section = "contact";
include(ROOT_PATH . 'inc/header.php'); ?>

    <div class="section page">

        <div class="wrapper">

            <h1>Contact</h1>

            

                <form method="post" action="<?php echo BASE_URL; ?>contact\thankyou1.php">

                    <table>
                        
                        <tr>
                            <th>
                                <label for="email">last name</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email" value="">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">message</label>
                            </th>
                            <td>
                                <input type="text" name="message" id="email"  value="">
                            </td>
                        </tr>
                                  
                    </table>
                    <input type="submit" value="send me">

                </form>

           
        </div>

    </div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>