<?php

class Resume
{
    private $name;
    private $aboutMe;
    private $skills;
    private $hobbies;

    public function __construct($name, $aboutMe, $skills, $hobbies)
    {
        $this->name = $name;
        $this->aboutMe = $aboutMe;
        $this->skills = $skills;
        $this->hobbies = $hobbies;
    }

    public function displayHeader()
    {
        echo "<header>";
        echo "<h1>{$this->name}</h1>";
        echo "</header>";
    }

    public function displayAboutMe()
    {
        echo "<section>";
        echo "<h2>About Me</h2>";
        echo "<p>{$this->aboutMe}</p>";
        echo "</section>";
    }

    public function displaySkills()
    {
        echo "<section>";
        echo "<h2>Skills</h2>";
        echo "<ul>";
        foreach ($this->skills as $skill) {
            echo "<li>$skill</li>";
        }
        echo "</ul>";
        echo "</section>";
    }

    public function displayHobbies()
    {
        echo "<section>";
        echo "<h2>Hobbies</h2>";
        echo "<ul>";
        foreach ($this->hobbies as $hobby) {
            echo "<li>$hobby</li>";
        }
        echo "</ul>";
        echo "</section>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAboutMe()
    {
        return $this->aboutMe;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function getHobbies()
    {
        return $this->hobbies;
    }

}

// Usage example:
$resume = new Resume(
    "Your Name",
    "Web Developer",
    "Brief introduction about yourself.",
    ["HTML", "CSS", "PHP", "JavaScript"],
    ["Reading", "Traveling", "Photography"]
);

$resume->displayHeader();
$resume->displayAboutMe();
$resume->displaySkills();
$resume->displayHobbies();
