Hoe maak je een Branch en push je het.

1. git init
2. git pull https://github.com/KaanSecen/TestingBranch.git
3. git branch naam (hierdoor maak je een branch.)
4. git branch (om te kijken in welke branch je zit er of die is gemaakt.)
5. git checkout naam (om in de branch te komen die je net hebt gemaakt.)
6. maak een verandering of voeg iets toe aan de branch.
7. git add .
8. git status (als alles klopt ga je door naar de volgende stap.)
9. git commit -m "text"
10. git remote add naam https://github.com/KaanSecen/TestingBranch.git
11. git push --set-upstream naam naam

Hoe je een branch kan mergen.

1. git checkout master (hierdoor ga je naar de master.)
2. git merge naam (hierdoor voeg je beide branches samen.)
3. git remote add master https://github.com/KaanSecen/TestingBranch.git 
4. git push --set-upstream master master