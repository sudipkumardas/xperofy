
                <h2 class="font-weight-bold">Specifications</h2>
                <hr/>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">General</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_general as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Display</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_display as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Platform</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_platform as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Rear Camera</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_rearcam as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Front Camera</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_frontcam as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Memory</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_memory as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Multimedia</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_multimedia as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Battery</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_battery as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <table class="table table-striped table-bordered shadow my-1">
                    <thead>
                        <th colspan=2 class="t-head py-0 feature">Network &amp; Connectivity</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach($spec_network as $name => $value){
                            echo '<tr><th class="py-1 feature">' .$name. '</th><td class="py-1">' .$value. '</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>