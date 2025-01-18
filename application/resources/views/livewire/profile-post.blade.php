<div>
    <header>
        <h1>業務経歴書作成ツール</h1>
    </header>
    <section>
        1：プロフィール→2：保有技術→3：業務経歴→4：確認→5：完了
    </section>
    <h2>プロフィール</h2>
    <form wire:submit="save" method="post">
        <div>
            <label for="name">氏名</label>
            <input id="name" type="text" wire:model="form.name">
            @error('form.name') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label>性別</label>

            <input id="male" type="radio" value="1" wire:model="form.gender">
            <label for="male">男性</label>

            <input id="female" type="radio" value="2" wire:model="form.gender">
            <label for="female">女性</label>
            @error('form.gender') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="age">年齢</label>
            <input id="age" type="number" wire:model="form.age">
            @error('form.age') <span class="error">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="nearestStation">最寄駅</label>
            <input id="nearestStation" type="text" wire:model="form.nearestStation">
            @error('form.nearestStation') <span class="error">{{ $message }}</span> @enderror
        </div>

        <button type="submit">次へ</button>
    </form>
</div>
