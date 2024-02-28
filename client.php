
    <header>
    <?php include('templates/head.php'); ?>

        <section class="textos-header">
            <h1>NUESTROS CLIENTES</h1>
            <h2></h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="clientes contenedor">
            <h2 class="titulo">Que dicen nuestros clientes</h2>

            <section class="testimony">
                <div class="testimony__container container">
                <img
                    src="./images/leftarrow.svg"
                    class="testimony__arrow"
                    id="before"
                />

                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                    <h2 class="subtitle">
                        Mi nombre es Jordan Alexander,
                        <span class="testimony__course">Actual cliente en Pulso Logico.</span>
                    </h2>
                    <p class="testimony__review">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, asperiores eaque totam nulla repudiandae quasi, deserunt
                        culpa exercitationem blanditiis laborum veniam laboriosam saepe
                        reiciendis dolorem. Cum, ratione voluptatum!
                    </p>
                    </div>

                    <figure class="testimony__picture">
                    <img src="./images/face3.jpg" class="testimony__img" />
                    </figure>
                </section>

                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                    <h2 class="subtitle">
                        Mi nombre es Alejandra Perez,
                        <span class="testimony__course">Actual cliente en Pulso Logico.</span>
                    </h2>
                    <p class="testimony__review">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, asperiores eaque laborum veniam laboriosam saepe
                        reiciendis dolorem. Cum, ratione voluptatum!
                    </p>
                    </div>

                    <figure class="testimony__picture">
                    <img src="./images/face2.jpg" class="testimony__img" />
                    </figure>
                </section>

                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                    <h2 class="subtitle">
                        Mi nombre es Karen Arteaga,
                        <span class="testimony__course">Actual cliente en Pulso Logico.</span>
                    </h2>
                    <p class="testimony__review">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione
                        voluptatum!
                    </p>
                    </div>

                    <figure class="testimony__picture">
                    <img src="./images/face.jpg" class="testimony__img" />
                    </figure>
                </section>

                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                    <h2 class="subtitle">
                        Mi nombre es Kevin Ramirez,
                        <span class="testimony__course">Actual cliente en Pulso Logico.</span>
                    </h2>
                    <p class="testimony__review">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione
                        voluptatum!
                    </p>
                    </div>

                    <figure class="testimony__picture">
                    <img src="./images/face4.jpg" class="testimony__img" />
                    </figure>
                </section>

                <img
                    src="./images/rightarrow.svg"
                    class="testimony__arrow"
                    id="next"
                />
                </div>
            </section>
        </section>        
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Clientes Actuales.</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="images/empresa1.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa2.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa3.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa4.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa5.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa6.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa7.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="images/empresa8.png" alt="">
                        <div class="hover-galeria">
                            <img src="images/icono1.png" alt="">
                            <p>Empresa "XXXX"</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include('templates/footer.php'); ?>