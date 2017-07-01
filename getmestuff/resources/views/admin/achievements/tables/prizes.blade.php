<h3 class="box-title">Manage All Achievements</h3>
<my-table get="/admin/api/achievements/prizes"
          post="/admin/api/achievements/prizes"
          :columns="[
                        { data: 'item' },
                        { data: 'description' },
                        { data: 'user_column' },
                        { data: 'bought' },
                        { data: 'price' },
                        { data: 'updated_at' },
                        { data: 'created_at'}
                     ]"
          :skip="['id', 'bought', 'updated_at', 'created_at']"
          :textarea="['description']">
    <template slot="header">
        <tr>
            <th>Item</th>
            <th>Description</th>
            <th>User Column</th>
            <th>Bought</th>
            <th>Price</th>
            <th>Updated</th>
            <th>Created</th>
        </tr>
    </template>
</my-table>