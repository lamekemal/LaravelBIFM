<section id="contact" class="contact-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="section-title text-center pb-30">
                    <h3 class="title">Contact</h3>
                    <p class="text">Nos contacts web et locale, disponible 24h/24 tous les jours!</p>
                </div> <!-- section title -->
            </div>
        </div>
        <div class="contact-info pt-30">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-1 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-whatsapp"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text" style="margin-top: 15px"> +229 99 14 25 03 </p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-2 mt-30 d-flex ">
                        <div class="contact-info-icon">
                            <i class="lni lni-envelope"></i>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text">support@bifm-tech.com</p>
                            <p class="text">info@bifm-tech.com</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-info contact-color-3 mt-30 d-flex ">
                    <div class="contact-info-icon">
                        <a href="https://www.facebook.com/bifmtec/"><i class="lni lni-facebook"></i></a>
                        </div>
                        <div class="contact-info-content media-body">
                            <p class="text"  style="margin-top: 15px">@bifmtec</p>
                        </div>
                    </div> <!-- single contact info -->
                </div>

            </div> <!-- row -->
        </div> <!-- contact info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <h4 class="contact-title pb-10"><i class="lni lni-envelope"></i> Demander un devis.</h4>
                        <form id="contact-form" action="/Devis" method="POST"
                        enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Nom</label>
                                        <div class="input-items default">
                                            <input name="name" type="text" placeholder="Nom">
                                            <i class="lni lni-user"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Email</label>
                                        <div class="input-items default">
                                            <input type="email" name="email" placeholder="Email">
                                            <i class="lni lni-envelope"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label>Numéro de téléphone</label>
                                        <div class="input-items default">
                                            <input value="TEL: " id="myUrl" type="TEXT" name="contact" placeholder="Contact téléphonique">
                                            <i class="lni lni-phone-set"></i>
                                        </div>
                                    </div> <!-- form input -->
                                </div>
                                <div class="col-md-6">
                                    <div class="form-input mt-25">
                                        <label for="cars">Catégorie </label>
                                        <div class="input-items default">
                                            <select name="category" id="categories">
                                                <option value="DEVIS > Electricité">Electricité</option>
                                                <option value="DEVIS > Climatisation">Climatisation</option>
                                                <option value="DEVIS > Facility Management-FM">Facility Management-FM</option>
                                                <option value="DEVIS > Sécurité">Sécurité</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="form-input light-rounded-buttons mt-30">
                                        <button class="main-btn light-rounded-two" type="submit" >Continuer</button>
                                    </div> <!-- form input -->
                                </div>
                            </div> <!-- row -->
                        </form>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
</section>
