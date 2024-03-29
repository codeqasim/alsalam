<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-divider">Header Menu<span class="panel-subtitle">Drag & drop hierarchical list with mouse and touch compatibility</span></div>
            <div class="panel-body">
                <div id="list2" class="dd">
                    <ol class="dd-list">
                        <li data-id="13" class="dd-item dd3-item">
                            <div class="dd-handle dd3-handle"></div>
                            <div class="dd3-content">Item 13</div>
                            <ol style="" class="dd-list">
                                <li data-id="14" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Item 14</div>
                                </li>
                                <li data-id="15" class="dd-item dd3-item">
                                    <div class="dd-handle dd3-handle"></div>
                                    <div class="dd3-content">Item 15</div>
                                    <ol style="" class="dd-list">
                                        <li data-id="16" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 16</div>
                                        </li>
                                        <li data-id="17" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 17</div>
                                        </li>
                                        <li data-id="18" class="dd-item dd3-item">
                                            <div class="dd-handle dd3-handle"></div>
                                            <div class="dd3-content">Item 18</div>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <div class="xs-mt-30">
                    <h4>Serialized Output:</h4>
                    <pre><code id="out2" ></code></pre>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading panel-heading-divider">Footer Menu<span class="panel-subtitle">Drag & drop hierarchical list with mouse and touch compatibility</span></div>
            <div class="panel-body">
                <div id="list1" class="dd">
                    <ol class="dd-list">
                        <li data-id="1" class="dd-item">
                            <div class="dd-handle">Item 1</div>
                        </li>
                        <li data-id="2" class="dd-item">
                            <div class="dd-handle">Item 2</div>
                        </li>
                        <li data-id="3" class="dd-item">
                            <div class="dd-handle">Item 3</div>
                            <ol class="dd-list">
                                <li data-id="4" class="dd-item">
                                    <div class="dd-handle">Item 4</div>
                                </li>
                                <li data-id="5" class="dd-item">
                                    <div class="dd-handle">Item 5</div>
                                </li>
                            </ol>
                        </li>
                    </ol>
                </div>
                <div class="xs-mt-30">
                    <h4>Serialized Output:</h4>
                    <pre><code id="out1"></code></pre>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    // $('#out2').on('span',function(e){
    //     console.log($(this).val());
    // });

</script>