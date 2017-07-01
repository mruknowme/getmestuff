<h3 class="box-title">Manage All Achievements</h3>
<my-table get="/admin/api/achievements"
          post="/admin/api/achievements"
          :columns="[
                        { data: 'title' },
                        { data: 'description' },
                        { data: 'need' },
                        { data: 'prize' },
                        { data: 'renew_slug' },
                        { data: 'type' },
                        { data: 'updated_at' },
                        { data: 'created_at'}
                     ]"
          :skip="['id', 'renew_slug', 'updated_at', 'created_at']"
          :select="{ 'renew' : {0:'None', 1:'Monthly', 2:'Instant'} }"
          :textarea="['description']">
    <template slot="header">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Amount Needed</th>
            <th>Points</th>
            <th>Renew</th>
            <th>Type</th>
            <th>Updated</th>
            <th>Created</th>
        </tr>
    </template>
</my-table>