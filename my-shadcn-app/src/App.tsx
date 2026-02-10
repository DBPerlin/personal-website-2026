import './App.css'
//import * as React from "react"
import { Link } from "react-router-dom"
import { Button } from "@/components/ui/button"
import {
  NavigationMenu,
  //NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuLink,
  //NavigationMenuList,
  //NavigationMenuTrigger,
} from "@/components/ui/navigation-menu"

function App() {
  return (
    <>
      <NavMenu />
      <main className="pt-16">
        <nav className="fixed top-55 left-0 right-0 bg-white">
        <TypographyH4 />
        </nav>
        <nav className="fixed top-70 left-0 right-0 bg-white">
        <TypographyH1 />
        </nav>
        <nav className="fixed top-100 left-0 right-0 bg-white">
        <TypographyH2 />
        </nav>
      </main>
    </>
  )
}

export function TypographyH1() {
  return (

    <h1 className="scroll-m-20 text-center text-4xl font-extrabold tracking-tight text-balance">
      Bem-vindo ao meu site
    </h1>
  )
}

export function TypographyH2() {
  return (
    <h2 className="scroll-m-20 pb-2 text-3xl font-semibold tracking-tight first:mt-0">
      Deixe os sapatos.
    </h2>
  )
}

export function TypographyH4() {
  return (
    <h4 className="scroll-m-20 text-xl font-semibold tracking-tight">
      — Olá
    </h4>
  )
}

export function NavMenu(){
  return (
  <>
    <Button asChild className="fixed top-15 left-10 bg-#5e4ae3">
      <Link to="/contato">Contato</Link>
    </Button>

    <Button className="fixed top-15 left-50" variant="ghost">Home</Button>
  </>
  )
}


export function NavigationMenuDemo() {
  return (
    <NavigationMenu className="font-bold">

          <NavigationMenuItem className="font-bold">
          <NavigationMenuLink>
            <Link to="/">Home</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink >
            <Link to="/projects">Apoie-me</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink>
            <Link to="/projects">Projetos</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink>
            <Link to="/about">Sobre mim</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink>
            <Link to="/freelance">Freelance</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink>
            <Link to="/portal">Portal privado</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>

    </NavigationMenu>
  )
}

export default App