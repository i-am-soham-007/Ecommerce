
<div class="col-lg-6 col-sm-6 col-md-6">
    <div class="mb-3">
        <label class="form-label">Select SubCategory Level </label>
        <select class="select2" name="parent_id" id="parent_id">
            <option value="0" @if(!empty($subcategorydata['parent_id']) && $subcategorydata['parent_id'] == 0) 
            selected="" @endif>Main SubCategory</option>
            @if(!empty($getSubCategories))
                @foreach($getSubCategories as $subcategory)
                    <option value="{{ $subcategory['id'] }}" @if(!empty($subcategorydata['parent_id']) && $subcategorydata['parent_id'] == $category['id']) 
                    selected="" @endif>{{ $subcategory['subcategory_name'] }}</option>
                    @if(!empty($subcategory['subchildcategory']))
                        @foreach($subcategory['subchildcategory'] as $subcatelist)
                            <option value="{{ $subcatelist['id'] }}">&nbsp;&raquo;&nbsp;{{ $subcatelist['subcategory_name'] }}</option>
                        @endforeach
                    @endif
                @endforeach
            @endif
        </select>
    </div>
</div>
