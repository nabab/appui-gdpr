<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="fr"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="fr"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="fr"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="fr"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="fr"><!--<![endif]-->
<head>

<base href="<?=$site_url?>/" target="_self">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="author" content="BBN Solutions">
<meta name="Copyright" content="<?=_("All rights reserved.")?>">
<meta http-equiv="expires" content="Fri, 22 Jul 2002 11:12:01 GMT">
<meta http-equiv="Cache-control" content="private">
<meta http-equiv="cache-control" content="no-store">
<link rel="apple-touch-icon" sizes="57x57" href="<?=$static_path?>img/favicon/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=$static_path?>img/favicon/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=$static_path?>img/favicon/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=$static_path?>img/favicon/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=$static_path?>img/favicon/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=$static_path?>img/favicon/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=$static_path?>img/favicon/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=$static_path?>img/favicon/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=$static_path?>img/favicon/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?=$static_path?>img/favicon/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?=$static_path?>img/favicon/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?=$static_path?>img/favicon/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?=$static_path?>manifest.json">
<link rel="mask-icon" href="<?=$static_path?>img/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#9f00a7">
<meta name="msapplication-TileImage" content="<?=$static_path?>img/favicon/mstile-144x144.png">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, User-scalable=yes">
<title><?=$site_title?></title>
<script type="text/javascript" src="<?=$shared_path?>?lang=fr&amp;lib=bbn-css|latest|default,bbn-vue"></script>
</head>

<body itemscope itemtype="http://schema.org/WebPage">
<div id="eula"
     class="bbn-overlay bbn-bg-white bbn-flex-height"
>
  <div class="bbn-w-100 bbn-justified bbn-lg bbn-hpadded">
    <h2 class="bbn-c">Avertissement</h2>
    <p>Ce site utilise des cookies. Veuillez lire et accepter les termes de notre politique de confidentialité afin de pouvoir y accéder.</p>
  </div>
  <div class="bbn-flex-fill bbn-s">
    <bbn-scroll>
      <div class="bbn-hlpadded">
        <?php include './gdpr.'.BBN_LANG.'.php'; ?>
      </div>
    </bbn-scroll>
  </div>
  <div class="bbn-w-100 bbn-c">
    <div class="bbn-iblock bbn-lpadded">
      <bbn-button class="bbn-lg" @click="accept"><?=_("J'accepte, aller sur le site").' '.$site_title?></bbn-button>
    </div>
  </div>
</div>
<script>  
  document.addEventListener('DOMContentLoaded', () => {  
    bbn.vue.init({
      env: {
        lang: "fr"
      }
    });
    new Vue({
      el: '#eula',
      data(){
        return {
          isMobile: bbn.fn.isMobile(),
          isTablet: bbn.fn.isTabletDevice()
        }
      },
      methods: {
        accept(){
          bbn.fn.setCookie('<?=BBN_APP_NAME?>', {bbn_accept_cookie: true});
          document.location.reload();
        }
      },
      created(){
        if ( this.isMobile ){
          document.body.classList.add('bbn-mobile');
        }
        if ( this.isTablet ){
          document.body.classList.add('bbn-tablet');
        }
      }
    })
  });
</script>
</body>
</html>
