<div class="bjui-pageFooter">
    <div class="pages">
        <span>每页&nbsp;</span>
        <div class="selectPagesize">
            <select data-toggle="selectpicker" data-toggle-change="changepagesize">
                <option value="30">30</option>
                <option value="60">60</option>
                <option value="120">120</option>
                <option value="150">150</option>
            </select>
        </div>
        <span>&nbsp;条，共  {{ $data['total'] }}  条</span>
    </div>
    <div class="pagination-box" data-toggle="pagination" data-total="{{ $data['total']}}" data-page-size="30" data-page-current="{{ $data['pageCurrent'] }}">
    </div>
</div>