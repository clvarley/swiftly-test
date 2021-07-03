<?= $this->renderPartial( APP_VIEW . "partials/header" ); ?>

<main role="main">
    <h1>Results</h1>

    <?php if ( !empty( $this->error ) ): ?>

        <section class="">
            <p>Invalid search</p>
        </section>

    <?php else: ?>

        <section class="">
            <?php foreach( $this->results as $result ): ?>
                <article class="">

                </article>
            <?php endforeach; ?>
        </section>

    <?php endif; ?>

    <section class="">

    </section>
</main>

<?= $this->renderPartial( APP_VIEW . "partials/footer" ); ?>
