<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    //controller
  
    include "header.php";
    if(isset($_GET['act']) && ($_GET['act'])){
        $req=($_GET['act']);
        switch ($req){
            // PHẦN DANH MỤC
            case 'ds-dm':
                // show danh mục
                $lists=showall_dm();
                //đường dẫn thêm danh mục
                include "danhmuc-admin/list.php";
                break;
            case 'add-dm':
                //đường dẫn thêm danh mục
                include "danhmuc-admin/add.php";
                // kiểm tra người dùng có bấm nút ko
                 if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $mavt = $_POST['mavt'];
                    $tenloai = $_POST['tenloai'];
                    $dvt = $_POST['dvt'];
                    $dongia = $_POST['dongia'];
                    $soluong = $_POST['soluong'];
                    add_dm($tenloai,$mavt,$dvt,$dongia,$soluong);
                    // $kt = 
                    // if()
                }
                break;

                // XÓA DANH MỤC
            case 'delete-dm':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                   del_dm($_GET['id']);
                }
                $lists=showall_dm();
                include "danhmuc-admin/list.php";
                break;

                // Sửa danh mục
            case 'capnhat-dm':
                    // kiểm tra CÓ DANH MỤC ĐÓ KO
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $dm=showone_dm($_GET['id']);
                    }
                    // hiển thị danh mục
                    include "danhmuc-admin/update.php";
                    break;

                // Sửa danh mục

            case 'update-dm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $mavt = $_POST['mavt'];
                        $tenloai = $_POST['tenloai'];
                        $dvt = $_POST['dvt'];
                        $dongia = $_POST['dongia'];
                        $soluong = $_POST['soluong'];
                        $id = $_POST['id'];
                        up_dm($tenloai,$mavt,$dvt,$dongia,$soluong,$id);
                    }
            $lists = showall_dm();
            include "danhmuc-admin/list.php";
            break;
                // Phần DANH MỤC


          

            case 'ds-bl':
                //code
                break;
            case 'thongke':
                //code
                break;
            case 'thoat':
                // if(isset($_SESSION['role'])) unset($_SESSION['role']);
                //     header('location: index.php');
                header("Location:../Donghocaocap-Vwatch/index.php");
                break;
            default :
                 // show danh mục
                 $lists = showall_dm();
                include "home.php";
                break;
            }
        } else {
            // show danh mục
            $lists = showall_dm();
            include "home.php";
        }
    

   
?>