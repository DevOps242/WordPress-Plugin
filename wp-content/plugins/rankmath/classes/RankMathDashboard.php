
<?php

class RankMathDashboard
{

    // Constructor
    public function __construct()
    {
        // add the actions to build the widget
        add_action('wp_dashboard_setup', [$this, 'buildDashboardWidget']);
    }


    public function buildDashboardWidget()
    {
        $url = 'rankmath_widget';

        wp_add_dashboard_widget(
            $url,
            'Rank Math Widget',
            [$this, 'widgetTemplate']
        );
    }

    public function widgetTemplate()
    {
        echo '
            <section class="wrap">
                <div style="min-width:100%" id="rankMathWidget"></div> 
            </section>
        ';
    }
}



new RankMathDashboard();
