        <section>
            <h3>Completed To-Dos</h3>
            <?php if ( isset($_SESSION['completedList']) ) : ?>
                <ul>
                    <?php foreach ( $_SESSION['completedList'] as $completedTask ) : ?>
                    <li><?php echo $completedTask; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </section>
    </div>
                   