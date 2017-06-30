<h3 class="box-title">Manage Reported Wishes</h3>
<my-table get="/admin/api/wishes/reported"
          post="/admin/api/wishes"
          :columns="[
                        { data: 'item' },
                        { data: 'user_id' },
                        { data: 'validated' },
                        { data: 'created_at' }
                     ]"
          :checkboxes="['validated']"
          :radio="['validated']"
          :skip="['id', 'created_at']">
    <template slot="header">
        <tr>
            <th>Item</th>
            <th>User ID</th>
            <th>Validated</th>
            <th>Created At</th>
        </tr>
    </template>
</my-table>