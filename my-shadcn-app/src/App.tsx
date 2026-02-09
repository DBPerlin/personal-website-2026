import './App.css'
import * as React from "react"
import { Link } from "react-router-dom"
import { Button } from "@/components/ui/button"
import {
  NavigationMenu,
  NavigationMenuContent,
  NavigationMenuItem,
  NavigationMenuLink,
  NavigationMenuList,
  NavigationMenuTrigger,
  navigationMenuTriggerStyle,
} from "@/components/ui/navigation-menu"

function App() {
  return (
    <>
    <NavigationMenuDemo />
      <TypographyH1 />
      <TypographyH2 />
    </>
  )
}

export function TypographyH1() {
  return (
    <h1 className="scroll-m-20 text-center text-4xl font-extrabold tracking-tight text-balance">
      Manuella Perlin
    </h1>
  )
}

export function TypographyH2() {
  return (
    <h2 className="scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0">
      Sobre Mim
    </h2>
  )
}

export function NavigationMenuDemo() {
  return (
    <NavigationMenu>
      <NavigationMenuList>
        <NavigationMenuItem>
          <NavigationMenuTrigger>Menu</NavigationMenuTrigger>
          <NavigationMenuContent>
            <ul className="w-96 scroll-m-20 text-left">
              <ListItem to="/" title="Home">
              </ListItem>
              <ListItem to="/#projects" title="Projetos">
              </ListItem>
              <ListItem to="/#about" title="Sobre Mim">
              </ListItem>
              <ListItem to="/#freelance" title="Freelance">
              </ListItem>
              <ListItem to="/portal" title="Portal Privado">
              </ListItem>
            </ul>
          </NavigationMenuContent>
        </NavigationMenuItem>

        <NavigationMenuItem>
          <NavigationMenuLink asChild className={navigationMenuTriggerStyle()}>
            <Link to="/contact">Fale Comigo</Link>
          </NavigationMenuLink>
        </NavigationMenuItem>
      </NavigationMenuList>
    </NavigationMenu>
  )
}

function ListItem({
  title,
  children,
  to,
  ...props
}: React.ComponentPropsWithoutRef<"li"> & { to: string }) {
  return (
    <li {...props}>
      <NavigationMenuLink asChild>
        <Link to={to} className="block rounded-md p-3 hover:bg-accent">
          <div className="text-sm font-medium">{title}</div>
          <p className="text-sm text-muted-foreground">{children}</p>
        </Link>
      </NavigationMenuLink>
    </li>
  )
}

export default App