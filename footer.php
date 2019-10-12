            </div>
        </div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/vue.min.js"></script>


<!-- Addtional scripts was here -->
<?php foreach($scripts as $script): ?>
<script src="js/<?php echo $script ?>"></script>
<?php endforeach; ?>
    
<!-- My define -->
<script src="js/scripts.js"></script>

<!-- Script module is here (Only file .js has exists new show here) -->
<?php foreach($modules as $module): ?>
    <?php if(file_exists("js/$module.js")): ?>
    <script src="js/<?php echo $module?>.js"></script>
    <?php endif; ?>
<?php endforeach; ?>
</body>
</html>