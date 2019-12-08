<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Shoes Care</title>
     
    <script type="text/javascript" src="<?php echo base_url('assets/chat/jquery.min.js') ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/chat/styles.css') ?>">
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url('assets/admin/css/bootstrap.css') ?>" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url('assets/admin/css/font-awesome.css') ?>" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url('assets/admin/css/custom.css') ?>" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin/Admin') ?>">Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  <a href="<?php echo base_url('logout/index') ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?php echo base_url().'assets/admin/img/find_user.png'?>" class="user-image img-responsive"/>
                    </li>
                    <li>
                        <a href="<?php echo base_url('admin/Admin') ?>"><i class="fa fa-dashboard fa-3x"></i> Data Order Online</a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('admin/C_transaksi') ?>"><i class="fa fa-book fa-3x"></i>Aktivitas Transaksi</a>
                    </li>
                    <li>
                        <a class="active-menu" href="<?php echo base_url('admin/C_chat') ?>"><i class="fa fa-comments fa-3x"></i>Obrolan</a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url('admin/C_features') ?>"><i class="fa fa-table fa-3x"></i> Fitur</a>
                    </li>
                    <li  >
                        <a   href="<?php echo base_url('admin/C_Account') ?>"><i class="fa fa-user fa-3x"></i> Akun</a>
                    </li> 
                     <li  >
                        <a   href="<?php echo base_url('admin/C_portofolio') ?>"><i class="fa fa-photo fa-3x"></i> Portfolio</a>
                    </li>
                     <li  >
                        <a   href="<?php echo base_url('admin/C_services') ?>"><i class="fa fa-paint-brush fa-3x"></i>Layanan</a>
                    </li>
                     <li  >
                        <a   href="<?php echo base_url('admin/C_testimoni') ?>"><i class="fa fa-comments fa-3x"></i> Testimoni</a>
                    </li>
                    <li  >
                        <a href="<?php echo base_url('admin/C_about') ?>"><i class="fa fa-edit fa-3x"></i> Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="container">
    <h1>
        Selamat datang <?= $this->user->nama_account ?>!
    </h1>
    <div id="body">
        <p>Daftar Obrolan Pelanggan:</p>
        <table style="width: 100%" id="table-friend">
            <?php foreach ($teman->result() as $item) { ?>
            <tr>
                <td><a href="javascript:;" data-friend="<?= $item->id ?>"><?= $item->nama_account ?></a></td>
            </tr>
            <?php } ?>
        </table>
        <br />
        <br />
    </div>
</div>
<!-- TEMPLATE -->
<div id="wgt-container-template" style="display: none">
    <div class="msg-wgt-container">
        <div class="msg-wgt-header">
            <a href="javascript:;" class="online"></a>
            <a href="javascript:;" class="nama_account"></a>
            <a href="javascript:;" class="close">x</a>
        </div>
        <div class="msg-wgt-message-container">
            <table width="100%" class="msg-wgt-message-list">
            </table>
        </div>
        <div class="msg-wgt-message-form">
            <textarea name="message" placeholder="Type your message. Press Shift + Enter for newline"></textarea>
        </div>
    </div>
</div>

<script type="text/x-template" id="msg-template" style="display: none">
    <tbody>
        <tr class="msg-wgt-message-list-header">
            <td rowspan="2"><img src="<?php echo base_url('assets/chat/avatar.png') ?>"></td>
            <td class="nama_account"></td>
            <td class="time"></td>
        </tr>
        <tr class="msg-wgt-message-list-body">
            <td colspan="2"></td>
        </tr>
        <tr class="msg-wgt-message-list-separator"><td colspan="3"></td></tr>
    </tbody>
</script>
<script type="text/javascript">
jQuery(document).ready(function($) {
    var chatPosition = [
        false, // 1
        false, // 2
        false, // 3
        false, // 4
        false, // 5
        false, // 6
        false, // 7
        false, // 8
        false, // 9
        false // 10
    ];
    // New chat
    $(document).on('click', 'a[data-friend]', function(e) {
        var $data = $(this).data();
        $('<audio id="chatAudio"><source src="<?php echo base_url('assets/sound/notifikasi.wav') ?>" type="audio/ogg"><source src="<?php echo base_url('assets/sound/notifikasi.mp3') ?>" type="audio/mpeg"><source src="<?php echo base_url('assets/sound/notifikasi.wav') ?>" type="audio/wav"></audio>').appendTo('body');
        if ($data.friend !== undefined && chatPosition.indexOf($data.friend) < 0) {
            var posRight = 0;
            var position;
            for(var i in chatPosition) {
                if (chatPosition[i] == false) {
                    posRight = (i * 270) + 20;
                    chatPosition[i] = $data.friend;
                    position = i;
                    break;
                }
            }
            var tpl = $('#wgt-container-template').html();
            var tplBody = $('<div/>').append(tpl);
            tplBody.find('.msg-wgt-container').addClass('msg-wgt-active');
            tplBody.find('.msg-wgt-container').css('right', posRight + 'px');
            tplBody.find('.msg-wgt-container').attr('data-chat-position', position);
            tplBody.find('.msg-wgt-container').attr('data-chat-with', $data.friend);
            $('body').append(tplBody.html());
            initializeChat();
        }
    });
    // Minimize Maximize
    $(document).on('click', '.msg-wgt-header > a.nama_account', function() {
        var parent = $(this).parent().parent();
        if (parent.hasClass('minimize')) {
            parent.removeClass('minimize')
        } else {
            parent.addClass('minimize');
        }
    });
    // Close
    $(document).on('click', '.msg-wgt-header > a.close', function() {
        var parent = $(this).parent().parent();
        var $data = parent.data();
        parent.remove();
        chatPosition[$data.chatPosition] = false;
        setTimeout(function() {
            initializeChat();
        }, 1000)
    });
    var chatInterval = [];
    var initializeChat = function() {
        $.each(chatInterval, function(index, val) {
            clearInterval(chatInterval[index]);   
        });
        $('.msg-wgt-active').each(function(index, el) {
            var $data = $(this).data();
            var $that = $(this);
            var $container = $that.find('.msg-wgt-message-container');
            chatInterval.push(setInterval(function() {
                var oldscrollHeight = $container[0].scrollHeight;
                var oldLength = 0;
                $.post('<?= site_url('chat/getChats') ?>', {chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    $that.find('a.nama_account').text(data.nama_account);
                    // from last
                    var chatLength = data.chats.length;
                    var newIndex = data.chats.length;
                    $.each(data.chats, function(index, el) {
                        newIndex--;
                        var val = data.chats[newIndex];
                        var tpl = $('#msg-template').html();
                        var tplBody = $('<div/>').append(tpl);
                        var id = (val.chat_id +'_'+ val.send_by +'_'+ val.send_to).toString();
                        if ($that.find('#'+ id).length == 0) {
                            tplBody.find('tbody').attr('id', id); // set class
                            tplBody.find('td.nama_account').text(val.nama_account); // set name
                            tplBody.find('td.time').text(val.time); // set time
                            tplBody.find('.msg-wgt-message-list-body > td').html(nl2br(val.message)); // set message
                            $that.find('.msg-wgt-message-list').append(tplBody.html()); // append message
                            $('#chatAudio')[0].play();
                            //Auto-scroll
                            var newscrollHeight = $container[0].scrollHeight - 20; //Scroll height after the request
                            if (newIndex === 0) {
                                $container.animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
                            }
                        }
                    });
                });
            }, 1000));

            $that.find('textarea').on('keydown', function(e) {
                var $textArea = $(this);
                if (e.keyCode === 13 && e.shiftKey === false) {
                    $.post('<?= site_url('chat/sendMessage') ?>', {message: $textArea.val(), chatWith: $data.chatWith}, function(data, textStatus, xhr) {
                    });
                    $textArea.val(''); // clear input
                    e.preventDefault(); // stop 
                    return false;
                }
            });
        });
    }
    var nl2br = function(str, is_xhtml) {
        var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br ' + '/>' : '<br>'; // Adjust comment to avoid issue on phpjs.org display
        return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
    }
    // on load
    initializeChat();
});
</script>
        </div>
             <!-- /. PAGE INNER  -->
            </div>

         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/jquery-1.10.2.js') ?>"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/jquery.metisMenu.js') ?>"></script>
</body>
</html>
