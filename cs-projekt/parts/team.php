<section class="team">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="title wow bounceIn">
                    <h2>We Are Growing</h2>
                </div>
            </div>
            <?php
            include_once "functions.php";
                $menu = new Menu();
                $team = $menu->getTeamMembers();
                $menu->printTeam($team);
            ?>

        </div>
    </div>
</section>