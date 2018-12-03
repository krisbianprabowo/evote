        $(document).ready(function() {

            var base_url = window.location.origin + "/assets/graph_json/graphpendaftar.json" ;
            console.log(base_url);
            $.ajax({

                url: base_url,
                type: 'GET',
                success: function(data) {
                
                    apiChart = new FusionCharts({
                        type: 'spline',
                        renderAt: 'chart-pendaftar',
                        width: '100%',
                        height: '450',
                        dataFormat: 'jsonurl',
                        dataSource: base_url
                    });
                    apiChart.render();
                }
            });
        });

        