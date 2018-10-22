<?php
    require 'header.php';
?>

<div class="margin-top-category"></div>

<div class="container">
    <div class="row">
        <div class="col s12 m8">
            <div class="title-single">STF bate o martelo sobre o momento de estabilidade da gestante.</div>
            <div class="img-single">
                <img src="img/posts/post.jpg"/>
            </div>
            <div class="date-post">
                <i class="material-icons icon-date">query_builder</i>
                20/10 às 17:00
            </div>
            <div class="content">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
            <div class="comments">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=1719551754798065&autoLogAppEvents=1';
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
                <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
            </div>
            <br/>

        </div>
        <div class="col s12 m4">
            <h1 class="publication-sidebar">Mais Lidas</h1>
            <div class="card">
                <div class="row">
                    <ol>
                        <li>O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica</li>
                        <div class="line-ol-li"></div>
                        <li>O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica</li>
                        <div class="line-ol-li"></div>
                        <li>O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica</li>
                        <div class="line-ol-li"></div>
                        <li>O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica</li>
                        <div class="line-ol-li"></div>
                        <li>O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="leia-tambem">
            <div class="col s12 m3 l3">
                <div class="btn-small single">
                    Leia Também
                </div>
            </div>
            <div class="col s12 m9 l9"></div>
        </div>
    </div>

    <div class="row">
        <?php
          for($i = 1; $i <=2; $i++){;
        ?>
    <div class="col s12 m4 l4">
        <div class="row">
            <div class="col s4">
                <img src="img/posts/nezinho.jpg"/>
            </div>
            <div class="col s8">
                <div class="tittle-leia-tambem">
                    O bitcoin é uma criptomoeda que se enquadra como moeda eletrônica.
                </div>
            </div>
        </div>
    </div>
        <?php
            }
        ?>
    </div>

</div>

<?php
    require 'footer.php';
?>