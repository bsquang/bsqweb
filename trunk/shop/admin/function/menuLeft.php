<style>
    a {
      color: #999;
      outline: none;
      -webkit-tap-highlight-color: transparent;
    }
    .secondary{
        width: 200px;
        height: 100%;
        background: white;
        float: left;
        border-right: 1px solid #DFDFDF;
    }
    .secondary ul li{
        border-bottom: 1px solid #dfdfdf;
        border-top: 1px solid #fff;
        padding: 10px;
    }
    .secondary ul li a{
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
<nav class='secondary'>
    <ul>
    <?php
	switch($_GET['thamso'])
	{
            case 'thay_doi_lien_he':
                echo '<li><a href="?thamso=thay_doi_lien_he">Liên hệ</a></li>
            <li><a href="?thamso=thay_doi_footer">Thay đổi footer</a></li>
            <li><a href="?thamso=thay_doi_thong_tin_quan_tri">Thay đổi thông tin quản trị</a></li>';
            break;
            case 'bien_luan_quan_ly_menu__www':
                echo '<li><a href="?thamso=bien_luan_them_menu__www">Thêm menu</a></li>
            <li><a href="?thamso=them_menu_doc">Thêm menu dọc</a></li>
            <li><a href="?thamso=them_menu_ngang">Thêm menu ngang</a></li>		
            <li><a href="?thamso=bien_luan_quan_ly_menu__www">Quản lý menu</a></li>
            <li><a href="?thamso=quan_ly_menu_doc">Quản lý menu dọc</a></li>
            <li><a href="?thamso=quan_ly_menu_ngang">Quản lý menu ngang</a></li>';
            break;        
            
            case 'bien_luan_quan_ly_du_lieu__www':
                echo '<li><a href="?thamso=bien_luan_them_du_lieu__www">Thêm dữ liệu</a></li>
            <li><a href="?thamso=them_san_pham">Thêm sản phẩm</a></li>
            <li><a href="?thamso=them_tin_tuc">Thêm tin tức</a></li>
            <li><a href="?thamso=bien_luan_quan_ly_du_lieu__www">Quản lý dữ liệu</a></li>
            <li><a href="?thamso=quan_ly_san_pham">Sản phẩm</a></li>
            <li><a href="?thamso=quan_ly_tin_tuc">Tin tức</a></li>
            <li><a href="?thamso=quan_ly_du_lieu_mot_tin">Hiển thị một tin</a></li>';
            break;
        
            case 'quan_ly_thanh_vien':
                echo '<li><a href="?thamso=quan_ly_thanh_vien">Thành viên</a></li>
            <li><a href="?thamso=quan_ly_hoa_don">Hóa đơn</a></li>
            <li><a href="?thamso=quan_ly_slideshow_trang_chu">Slideshow trang chủ</a></li>
            <li><a href="?thamso=quan_ly_san_pham_trang_chu">Sản phẩm trang chủ</a></li>';
            break;
        }
    ?>
    </ul>
</nav>