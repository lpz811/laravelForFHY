
<div class="bjui-pageContent">
    <div class="box-body">
        <ul id="tree" class="ztree"></ul>
    </div>
</div>
<div class="bjui-pageFooter">
    <ul>
        <li><button type="button" class="btn-close" data-icon="">取消</button></li>
        <li><button type="submit" class="btn-default">保存</button></li>
    </ul>
</div>
<script type="text/javascript">
    var id = {{ $id }};
    var nodes = {!! $data !!};
    var setting = {
        check: {
            enable: true,
            chkboxType: {"Y": "ps", "N": "ps"}
        },
        data: {
            simpleData: {
                enable: true
            }
        }
    };

    $(document).ready(function () {
        $.fn.zTree.init($("#tree"), setting, nodes);
        var zTree = $.fn.zTree.getZTreeObj("tree");

        $('#check-all-true').click(function () {
            zTree.checkAllNodes(true);
        });

        $('#check-all-false').click(function () {
            zTree.checkAllNodes(false);
        });

        $('#save-menu-permission').click(function () {
            var tree = zTree.getCheckedNodes(true);

            var actions = [];
            for (var i = 0; i < tree.length; i++) {
                if (!$.isNumeric(tree[i].id)) {
                    continue;
                }
                actions.push(tree[i].id);
            }

            Backend.ajax.request({
                data: {id: id, actions: actions},
                href: "{{route('backend.permission.associate.menus')}}"
            });
        });
    });
</script>