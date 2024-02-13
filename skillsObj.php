<?php

// Klasse für Skills
class Skill
{
    private $name;
    private $progress;
    private $percent;

    public function __construct($name, $progress, $percent)
    {
        $this->name = $name;
        $this->progress = $progress;
        $this->percent = $percent;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getProgress()
    {
        return $this->progress;
    }

    public function getPercent()
    {
        return $this->percent;
    }
}

// Klasse für Skill-Set
class SkillSet
{
    private $skills = [];

    public function addSkill(Skill $skill)
    {
        $this->skills[] = $skill;
    }

    public function getSkills()
    {
        return $this->skills;
    }
}


// Array mit den Skill-Daten
$skillsData = [
    "languages" => [
        ["Englisch", 75],
        ["Deutsch", 90],
        ["Spanisch", 15],
        ["Schwedisch", 10],
        ["Russisch", 5],
        ["Chinesisch Vereinfacht", 8],
    ],

    "programmingLanguages" => [
        ["PHP", 70],
        ["HTML", 90],
        ["CSS", 80],
        ["SCSS", 70],
        ["Javascript", 60],
        ["TypeScript", 50],
        ["Python", 30],
        ["Java", 40],
        ["C++", 10],
        ["MySQL", 60],
        ["PowerShell", 50]
    ],

    "frameworks" => [
        ["Symfony", 70],
        [".NET", 20]
    ],
];

// Skill-Objekte erstellen und zum SkillSet hinzufügen
$skillSet = new SkillSet();

foreach ($skillsData as $category => $skills) {
    foreach ($skills as $data) {
        $skillSet->addSkill(new Skill($data[0], $data[1], $data[2]));
    }
}

?>