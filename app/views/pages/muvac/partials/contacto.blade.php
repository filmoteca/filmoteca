            <div class="contactContainer" ng-app="ContactForm">
                <h1>Contacto</h1>
                <form name="cf" ng-controller="cfController as cfCtrl" ng-submit="submitForm(cf.$valid)" novalidate>
                    <div class="form-group">
                        <label for='g52-name' class='grunion-field-label name'>Nombre{{'si'}}</label>
                        <input id="g52-name" type="text" name="g52-name" ng-model="g52-name" value=''>
                    </div>                      
                    <div class="form-group">
                        <label for='g52-email' class='grunion-field-label email'>Email<span>*</span></label>
                        <input id="g52-email" type="email" name="g52-email" value='' required/>
                    </div>
                    <div class="form-group">
                        <label for='contact-form-comment-g52-comment' class='grunion-field-label textarea'>Mensaje<span>*</span></label>
                        <textarea id="contact-form-comment-g52-comment" name="g52-comment" rows="6" ng-model="msg" required></textarea>
                    </div>
                    <p id="contacForm" class='contact-submit'>
                    <input type="submit" value="Enviar" ng-disabled="cf.$invalid"/>
                </form>
            </div>