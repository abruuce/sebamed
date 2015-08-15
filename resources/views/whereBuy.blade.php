@if ($type == 'official')
    官方購物網
@elseif($type == 'onlineshop')
    網路商店
@elseif($type == 'drugstore')
    連鎖藥妝
@else
    <?php $last_seq = NULL; ?>
    <table>
    @foreach($deptstores as $store)
        <tr>
            <td>
                @if ($store->sequence != $last_seq)
                    {{ $store->area }}
                @endif
            </td>
            <td>
                {{ $store->address}}
            </td>
        </tr>
            <?php $last_seq = $store->sequence; ?>
    @endforeach
    </table>
@endif