        $(document).ready(function() {

            var base_url = window.location.origin + "/assets/graph_json/graphprioritas2.json" ;
            console.log(base_url);
            $.ajax({

                url: base_url,
                type: 'GET',
                success: function(data) {
                
                    apiChart = new FusionCharts({
                        type: 'pie2d',
                        renderAt: 'chart-prioritas2',
                        width: '100%',
                        height: '400',
                        dataFormat: 'jsonurl',
                        dataSource: base_url
                    });
                    apiChart.render();
                }
            });
        });

        