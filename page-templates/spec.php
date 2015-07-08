<?php 

/*
Template name: spec
*/

get_header();
?>
<section class="page fancy-sidebars">
    <main>
        <div class="inner">
            <article>
                <section class="typografi">
                    <article>
                        <h3>Typografi</h3>
                        <hr>
                        <p>Typografi skrives aoutomatisk til typografiske elementer, der findes i et article-tag. </p>
                        <h1>Heading 1 (bruges som reglen i markup, derfor faulty render)</h1>
                        <h2>Heading 2</h2>
                        <h3>Heading 3</h3>
                        <h4>Heading 4</h4>
                        <h5>Heading 5</h5>
                        <h6>Heading 6</h6>
                        <p>Almindelig paragraf: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint ipsa nihil magnam, dolores, quia recusandae officia odit itaque inventore ut, adipisci reiciendis! Fuga rerum nesciunt debitis saepe, quas necessitatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint ipsa nihil magnam, dolores, quia recusandae officia odit itaque inventore ut, adipisci reiciendis! Fuga rerum nesciunt debitis saepe, quas necessitatibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint ipsa nihil magnam, dolores, quia recusandae officia odit itaque inventore ut, adipisci reiciendis! Fuga rerum nesciunt debitis saepe, quas necessitatibus.</p>
                        <p><a href="#">Links i artikler</a></p>
                        <ul>
                            <li>Liste</li>
                            <li>Liste</li>
                            <li>Liste</li>
                        </ul>
                        <ol>
                            <li>Liste</li>
                            <li>Liste</li>
                            <li>Liste</li>
                        </ol>
                        <hr>
                    </article>
                </section>


                <section class="knapper">
                    <article>
                        <h3>Knapper</h3>
                        <p>Standard knapper: Store og små, grøn sort, rød.</p>

                        <a class="button">Klik her</a>
                        <a class="button large">Klik her</a><br/>
                        
                        <a class="button black">Klik her</a>
                        <a class="button black large">Klik her</a><br/>
                        
                        <a class="button red">Klik her</a>
                        <a class="button red large">Klik her</a><br/>
                        
                        <a class="button outline">Klik her</a>
                        <a class="button outline black">Klik her</a>
                        <a class="button outline red">Klik her</a><br/>
                        
                        <a class="button outline large">Klik her</a>
                        <a class="button outline black large">Klik her</a>
                        <a class="button outline red large">Klik her</a><br/>
                        <br/>
                        <br/>
                        <hr>
                        <p>Knappile: højre, ventsre, op, ned</p>
                        <a class="button-dir right"></a>
                        <a class="button-dir"></a>
                        <a class="button-dir up"></a>
                        <a class="button-dir down"></a>
                        <br/>
                        <br/>
                        <hr>
                        <p>Playknap</p>
                        <a class="playbtn"></a>
                        <br/>
                        <br/>
                        <hr/>
                        <p>Abe</p>
                        <a class="ape-circle"></a>
                    </article>
                </section>


                <section class="forms">
                    <article>
                        <h3>Formularer</h3>
                        <p>Text, email, tel, number, select, checkbox, range</p>
                        <h5>Standardformular:</h5>
                        <form>
                            <div>
                                <select>
                                    <option value="hide"></option>
                                    <option>1 kasse øller</option>
                                    <option>2 kasser rom</option>
                                    <option>3 kasser dej</option>
                                    <option>4 kasser løse patroner</option>
                                </select>
                                <label>Vælg en mulighed</label>
                            </div>
                            <div>
                                <input type="text" name="fname">
                                <label for="fname">Dit navn</label>
                            </div>
                            <div>
                                <input type="email" name="email">
                                <label for="email">Din email</label>
                            </div>
                            <div>
                                <input type="tel" name="tel">
                                <label for="tel">Dit telefonnummer</label>
                            </div>
                            <div>
                                <input type="number" >
                                <label>Antal besøgende</label>
                            </div>
                            <div>
                                <textarea rows="1"></textarea>
                                <label>Tilføj en kommentar</label>
                            </div>
                            <div>
                                <input type="checkbox">
                                <label>Ving checkbox af</label>
                            </div>
                            <div>
                                <input type="range">
                                <label>Træk skyderen til ønsket position</label>
                            </div>
                        </form>
                        <br>
                        <br>
                        <h5>Formular på hvidt papir (class="sheeted-form small"):</h5>
                        <form class="sheeted-form small">
                            <div>
                                <select>
                                    <option value="hide"></option>
                                    <option>1 kasse øller</option>
                                    <option>2 kasser rom</option>
                                    <option>3 kasser dej</option>
                                    <option>4 kasser løse patroner</option>
                                </select>
                                <label>Vælg en mulighed</label>
                            </div>
                            <div>
                                <input type="text" name="fname">
                                <label for="fname">Dit navn</label>
                            </div>
                            <div>
                                <input type="email" name="email">
                                <label for="email">Din email</label>
                            </div>
                            <div>
                                <input type="tel" name="tel">
                                <label for="tel">Dit telefonnummer</label>
                            </div>
                            <div>
                                <input type="number" >
                                <label>Antal besøgende</label>
                            </div>
                            <div>
                                <textarea rows="1"></textarea>
                                <label>Tilføj en kommentar</label>
                            </div>
                            <div>
                                <input type="checkbox">
                                <label>Ving checkbox af</label>
                            </div>
                            <div>
                                <input type="range">
                                <label>Træk skyderen til ønsket position</label>
                            </div>
                        </form>
                        <br/>
                        <br/>
                    </article>



                </section>
            </article>
        </div>  
    </main>
    <div class="fancy-asides start">
        <aside class="aside-right start">
        <div class="inner">
            <nav class="article-nav">
               <ul></ul>
            </nav>
            </div>
        </aside>
        <aside class="aside-left">
        <div class="inner">
            
        </div>
        </aside>
    </div>
</section>

<?php get_footer(); ?>