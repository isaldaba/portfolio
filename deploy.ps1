param(
    [string]$msg = "update portfolio"
)

$env:PATH = "C:\Program Files\nodejs;" + $env:PATH
$root = "C:\xampp\htdocs\portfolio"

Write-Host "`n Building assets..." -ForegroundColor Cyan
& "C:\Program Files\nodejs\node.exe" "C:\Program Files\nodejs\node_modules\npm\bin\npm-cli.js" run build --prefix $root
if ($LASTEXITCODE -ne 0) { Write-Host "Build failed!" -ForegroundColor Red; exit 1 }

Write-Host "`n Committing and pushing..." -ForegroundColor Cyan
Set-Location $root
git add -A
git commit -m $msg
git push origin ircis-branch

Write-Host "`n Deployed! Railway will update in ~1-2 minutes." -ForegroundColor Green
Write-Host " Live at: https://ircisaldaba.online`n" -ForegroundColor Green
