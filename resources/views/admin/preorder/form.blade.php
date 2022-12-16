<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label">{{ 'Id Produk' }}</label>
    <input class="form-control" name="id_produk" type="number" id="id_produk" value="{{ isset($preorder->id_produk) ? $preorder->id_produk : ''}}" >
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('id_po') ? 'has-error' : ''}}">
    <label for="id_po" class="control-label">{{ 'Id Po' }}</label>
    <input class="form-control" name="id_po" type="number" id="id_po" value="{{ isset($preorder->id_po) ? $preorder->id_po : ''}}" >
    {!! $errors->first('id_po', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('tanggal_pembelian') ? 'has-error' : ''}}">
    <label for="tanggal_pembelian" class="control-label">{{ 'Tanggal Pembelian' }}</label>
    <input class="form-control" name="tanggal_pembelian" type="date" id="tanggal_pembelian" value="{{ isset($preorder->tanggal_pembelian) ? $preorder->tanggal_pembelian : ''}}" >
    {!! $errors->first('tanggal_pembelian', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
