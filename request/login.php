<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    session_start();

          $err='';
          $err_login = '';
          $success = '';


          if (!$_POST['utilizador'])
            $err .= '- Username * <br>';
          else 
            $utilizador = $_POST['utilizador']; 

          if (!$_POST['password'])
            $err .= '- Password * <br>';
          else 
            $password=$_POST['password']; 
  if($_SERVER["REQUEST_METHOD"] == "POST") 
  {
     if($err == '')
     {
          $utilizador = $_POST['utilizador'];
          $password = md5(trim($_POST['password']));
          


            $d_login = date("Y-m-d");
            $h_login = date('H:i');

            $sql1 = mysqli_query($conn, "SELECT id FROM admins WHERE nome='$utilizador'");
            $exibe1 = mysqli_fetch_assoc($sql1);
            $id = $exibe1['id']; 
            $sql_act =" UPDATE admins SET data_login = '$d_login', hora_login = '$h_login' WHERE id = $id";

            $result2 = mysqli_query($conn,$sql_act);
            if ($result2)
            {
                $sql = "SELECT * FROM admins WHERE nome='$utilizador' AND pass='$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $rowcount=mysqli_num_rows($result);

                
                if ($rowcount == 1)
                {
                  $_SESSION['pr_uid']=$row['id'];
                  $_SESSION['username']=$row['nome'];
                  $_SESSION['privilegios'] = $row['tipo'];
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['country'] = $row['country'];
                  $_SESSION['departament'] = $row['departament'];
                  $_SESSION['skills'] = $row['skills'];
                  $_SESSION['logotipo'] = $row['logotipo'];
                  $_SESSION['access'] = $row['privilegios'];


                  $_SESSION['data_login'] = $row['data_login'];
                  $_SESSION['hora_login'] = $row['hora_login'];

                  $_SESSION['data_criacao'] = $row['data_criacao'];
                  $_SESSION['hora_criacao'] = $row['hora_criacao'];
                  

                  $l_activity = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));

                  $sql_session =" INSERT INTO sessao_logged (user_id, last_activity) VALUES ('$id', '$l_activity')";
                    if (mysqli_query($conn, $sql_session)) 
                    {
                        $last_id_session = mysqli_insert_id($conn);
                        $_SESSION['login_id'] = $last_id_session;
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                  



                  $s = $_SESSION['privilegios'];
                  $setpriv = "SELECT * FROM privilegios WHERE tipo= '$s' ";
                  $res = mysqli_query($conn, $setpriv);
                  if (mysqli_num_rows($result) > 0) 
                  {
                    while($row = mysqli_fetch_assoc($res)) 
                    {
                       $_SESSION['home_dashboard'] = $row['home_dashboard'];
                       $_SESSION['home_site_pages'] = $row['home_site_pages'];
                       $_SESSION['home_site_pages_site_blogs'] = $row['home_site_pages_site_blogs'];
                       $_SESSION['home_site_pages_site_badges'] = $row['home_site_pages_site_badges'];

                       $_SESSION['home_site_pages_calendar'] = $row['home_site_pages_calendar'];
                       $_SESSION['home_site_pages_site_news'] = $row['home_site_pages_site_news'];
                       $_SESSION['home_site_pages_main_activities'] = $row['home_site_pages_main_activities'];
                       $_SESSION['home_site_pages_main_activities_spa'] = $row['home_site_pages_main_activities_spa'];

                       $_SESSION['home_site_pages_main_activities_pos'] = $row['home_site_pages_main_activities_pos'];
                       $_SESSION['home_site_pages_main_activities_marketing'] = $row['home_site_pages_main_activities_marketing'];

                       $_SESSION['home_site_pages_main_activities_inventory'] = $row['home_site_pages_main_activities_inventory'];

                       $_SESSION['home_site_pages_main_activities_golf'] = $row['home_site_pages_main_activities_golf'];
                       $_SESSION['home_site_pages_main_activities_user_security'] = $row['home_site_pages_main_activities_user_security'];



                    }
                  }
                  //$_SESSION['access'] = $row['privilegios'];

                  setcookie("username", $_SESSION['username'], time() + (86400 * 30), "/"); 
                  setcookie("id", $_SESSION['pr_uid'], time() + (86400 * 30), "/");
                  setcookie("privilegios", $_SESSION['privilegios'], time() + (86400 * 30), "/");
                  setcookie("email", $_SESSION['email'], time() + (86400 * 30), "/"); 
                  setcookie("country", $_SESSION['country'], time() + (86400 * 30), "/");
                  setcookie("departament", $_SESSION['departament'], time() + (86400 * 30), "/");
                  setcookie("skills", $_SESSION['skills'], time() + (86400 * 30), "/"); 
                  setcookie("logotipo", $_SESSION['logotipo'], time() + (86400 * 30), "/");
                  setcookie("access", $_SESSION['access'], time() + (86400 * 30), "/");

                  setcookie("data_criacao", $_SESSION['data_criacao'], time() + (86400 * 30), "/");
                  setcookie("hora_criacao", $_SESSION['hora_criacao'], time() + (86400 * 30), "/");

                  setcookie("data_login", $_SESSION['data_login'], time() + (86400 * 30), "/");
                  setcookie("hora_login", $_SESSION['hora_login'], time() + (86400 * 30), "/");

                  setcookie("home_dashboard", $_SESSION['home_dashboard'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages", $_SESSION['home_site_pages'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_site_blogs", $_SESSION['home_site_pages_site_blogs'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_site_badges", $_SESSION['home_site_pages_site_badges'], time() + (86400 * 30), "/");

                  setcookie("home_site_pages_calendar", $_SESSION['home_site_pages_calendar'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_site_news", $_SESSION['home_site_pages_site_news'], time() + (86400 * 30), "/");

                  setcookie("home_site_pages_main_activities", $_SESSION['home_site_pages_main_activities'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages", $_SESSION['home_site_pages'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_main_activities_spa", $_SESSION['home_site_pages_main_activities_spa'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_main_activities_pos", $_SESSION['home_site_pages_main_activities_pos'], time() + (86400 * 30), "/");

                  setcookie("home_site_pages_main_activities_inventory", $_SESSION['home_site_pages_main_activities_inventory'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_site_news", $_SESSION['home_site_pages_site_news'], time() + (86400 * 30), "/");

                  setcookie("home_site_pages_main_activities_golf", $_SESSION['home_site_pages_main_activities_golf'], time() + (86400 * 30), "/");
                  setcookie("home_site_pages_main_activities_user_security", $_SESSION['home_site_pages_main_activities_user_security'], time() + (86400 * 30), "/");

                  setcookie("home_site_pages_main_activities_marketing", $_SESSION['home_site_pages_main_activities_marketing'], time() + (86400 * 30), "/");




                  setcookie("access", $_SESSION['access'], time() + (86400 * 30), "/");
                  
                  setcookie("login_id", $_SESSION['login_id'], time() + (86400 * 30), "/");
                  

                  $success='../index.php';
                  $arr = array('error'=>'', 'id'=>$_SESSION['pr_uid'], 'success'=>$success);

                }
                else
                {
                  $err_login = 'Utilizador ou Password incorretos';
                  $arr = array('error'=>$err_login, 'id'=>'', 'success'=>'');
                }
            }
            else
            {
                  $err_login2 = 'Utilizador ou Password incorretos';
                  $arr = array('error'=>$err_login2, 'id'=>'', 'success'=>'');
            }



          
      }
      else
      {
          $arr = array('error'=>$err, 'id'=>'', 'success'=>'');
      }
    }

      mysqli_close($conn);
      echo json_encode($arr);
?>
